<template>
    <div>
        <div class="mt-4" v-for="answer in answers" :key="answer.id">
            <answer-item :answer="answer" :response-count="responseCount" :current-ip="currentIp" />
        </div>
    </div>
</template>

<script>
import AnswerItem from './AnswerItem.vue'
    export default {
    components: { AnswerItem },
        props: {
            'answers': Array,
            'currentIp': String,
        },
        data() {
            return {
                responseCount: this.getResponseCount(),
            }
        },
        methods: {
            getResponseCount() {
                let count = 0;
                this.answers.forEach(answer => {
                    count += answer.responders.length;
                });
                return count;
            },
        },
    }
</script>