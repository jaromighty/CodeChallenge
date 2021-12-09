<template>
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <h2 class="pt-12 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl">
            Current Polls
        </h2>
        <div class="mt-8">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <li v-for="poll in polls" :key="poll.id" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="w-full flex items-center justify-between p-6 space-x-6">
                        <div class="flex-1">
                            <div class="flex items-center space-x-3">
                                <h3 class="text-gray-900 text-sm font-medium">{{ poll.name }}</h3>
                            </div>
                            <div class="mt-2">
                                <poll-answers :answers="poll.answers" :current-ip="currentIp" />
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import PollAnswers from './PollAnswers.vue';
    
    export default {
        props: {
            'polls': Array,
            'currentIp': String,
        },
        components: {
            PollAnswers,
        },
        mounted() {
            console.log(this.polls)
        },
    }
</script>