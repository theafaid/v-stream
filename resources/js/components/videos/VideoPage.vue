<template>
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">
                    <vote-buttons :video-uid="video.uid"></vote-buttons>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</template>

<script>
    import Voting from '../public/Voting';

    export default {
        props: ['video'],

        components: {
            VoteButtons: Voting,
        }
    }
</script>
