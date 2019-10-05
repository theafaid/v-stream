<template>
    <form class="card" enctype="multipart/form-data" method="POST" action="">
        <div class="card-body">
            <h3 class="card-title">Upload Video in {{channel.name}} Channel</h3>
            <div class="row">
                <div class="col-md-12">
                    <div v-if="uid" class="alert alert-secondary">Your video will be available at <a :href="videoUrl" target="_blank">{{videoUrl}}</a></div>
                    <div v-if="uploadCompleted" class="alert alert-success">
                        Upload successfully complete. Video is processing. <a href="/videos">Go to you videos</a>
                    </div>
                    <div v-if="failed" class="alert alert-danger">Something wrong happened! Please Try Once Again.</div>

                    <div class="form-group">
                        <label class="form-label">Select Playlist</label>
                        <select class="form-control" v-model="playlist">
                            <option value="">Select</option>
                            <option v-for="(name, slug) in playlists" :key="slug" :value="slug">
                                {{name}}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12" v-if="playlist">
                    <div class="form-group">
                        <label class="form-label" v-if="!uploadCompleted && ! failed">{{!uploading ? 'Upload Video' : 'Video is Uploading ...'}}</label>
                        <template>
                            <input v-if="!uploading || failed" type="file" class="form-control" @change="changed">
                            <div class="progress" v-if="!uploadCompleted && uploading && !failed">
                                <div
                                    :style="{width: fileProgress + '%'}"
                                    class="progress-bar progress-bar-striped progress-bar-animated"
                                    role="progressbar"
                                    :aria-valuenow="fileProgress"
                                    aria-valuemin="0" aria-valuemax="100">{{Math.round(fileProgress)}}%</div>
                            </div>
                            <div v-if="uploading && !failed">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input class="form-control" type="text" v-model="form.title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" v-model="form.description" rows="7"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Visibility</label>
                                    <select class="form-control" v-model="form.visibility">
                                        <option value="private">Private</option>
                                        <option value="unlisted">Unlisted</option>
                                        <option value="public">Public</option>
                                    </select>
                                </div>
                                <span v-if="saveStatus" class="float-right badge badge-secondary">{{saveStatus}}</span>
                                <div class="form-group">
                                    <button class="btn btn-default" @click.prevent="update" v-if="!loading">
                                        Save Changes
                                    </button>
                                    <span v-else class="loader"></span>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['playlists', 'channel'],

        data() {
            return {
                loading: false,
                uploading: false,
                uploadCompleted: false,
                failed: false,
                playlist: "",
                file: null,
                uid: null,
                saveStatus: null,
                fileProgress: 0,

                form: {
                    title: "Untitled",
                    description: null,
                    visibility: 'public',
                }
            }
        },

        created() {
          window.onbeforeunload = () => {
              if(this.uploading && !this.uploadCompleted && !this.failed) {
                  return 'Your video is uploading! Are you sure to leave ?';
              }
          };
        },

        computed: {
            canStore() {
                return this.file && this.playlist;
            },

            canUpdate() {
                return !! this.uid;
            },

            fileExtension() {
                return this.file.name.split('.').pop();
            },

            videoUrl() {
                return `${this.$root.url}/videos/${this.uid}`;
            }
        },

        methods: {
            changed(e) {
                this.failed = false;
                this.uploading = true;
                this.uploadCompleted = false;
                this.file = e.target.files[0];

                this.store()
                    .then(({data}) => {
                        this.uid = data.uid;
                        this.upload();
                    })
                    .catch(() => this.failed = true);
            },

            upload() {
                var form = new FormData();
                form.append('video', this.file);
                form.append('uid', this.uid);
                form.append('playlist', this.playlist);

                axios.post(location.pathname, form, {
                    onUploadProgress: (e) => {
                        if(e.lengthComputable) this.updateProgress(e);
                    },
                }).then(() => {
                    this.uploadCompleted = true;
                    this.uploading = false;
                }).catch(() =>  this.failed = true);
            },

            updateProgress(e) {
                this.fileProgress = (e.loaded * 100) / e.total;
            },

            store() {
                if(this.canStore) {
                    return axios.post(
                        this.endpoint(),
                        {...{extension: this.fileExtension}, ...this.form}
                    );
                }
            },

            update() {
                if(this.canUpdate) {
                    this.loading = true;
                    this.saveStatus = 'Saving Changes ...';

                    this.persistUpdate();
                }
            },

            persistUpdate() {
                axios.patch(this.endpoint(this.uid), this.form)
                    .then(response => this.updateSucceeded())
                    .catch(error => this.updateFailed());
            },

            updateSucceeded(response) {
                this.loading = false;
                this.saveStatus = 'Changes Saved Successfully';

                setTimeout(() => {
                    this.saveStatus = null;
                }, 2500);
            },

            updateFailed(response) {
                this.loading = false;
                this.saveStatus = 'Failed To Save Changes !';
            },

            endpoint(segments = null) {
                return `/channels/${this.channel.slug}/playlists/${this.playlist}/videos${segments ? '/'+segments : ''}`;
            }
        }
    }
</script>
