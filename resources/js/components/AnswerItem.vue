<template>
    <button class="relative text-left w-full bg-gray-200 hover:bg-gray-300 rounded">
        <div v-show="show" class="absolute bg-blue-300 rounded h-full" :style="`width: ${width}%`"></div>
        <div class="relative py-1 px-2">
            {{ answer.text }}
        </div>
    </button>
</template>

<script>
    export default {
        props: {
            'answer': Object,
            'responseCount': Number,
            'currentIp': String,
        },
        data() {
            return {
                width: this.getWidth(),
                show: this.showAnswers(),
            }
        },
        methods: {
            getWidth() {
                return (this.answer.responders.length / this.responseCount) * 100;
            },
            showAnswers() {
                return this.answer.responders.findIndex(responder => responder.ip_address === this.currentIp) < 0
                        ? false
                        : true;
            },
        },
    }
</script>