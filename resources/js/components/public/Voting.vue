<template>
    <span class="float-right">
        <button class="btn" :class="voted ? 'btn-info' : 'btn-light'">
            <i class="fa fa-thumbs-up"></i> ({{upCount ? upCount : 0}})
        </button>
        <button class="btn" :class="voted==false ? 'btn-danger' : 'btn-light'" @click.prevent="voted">
            <i class="fa fa-thumbs-down"></i> ({{downCount ? downCount : 0}})
        </button>
    </span>
</template>

<script>
    export default {
        props: ['videoUid'],

        data() {
            return {
                upCount: null,
                downCount: null,
                voted: null,
                canVote: null
            }
        },

        mounted() {
            this.fetchVotes();
        },

        methods: {
            fetchVotes() {
                axios.get(`/videos/${this.videoUid}/votes`)
                    .then(({data}) => {
                       this.upCount = data.upCount;
                       this.downCount = data.downCount;
                       this.canVote = data.canVote;
                       this.voted = data.voted;
                    });
            }
        }
    }
</script>
