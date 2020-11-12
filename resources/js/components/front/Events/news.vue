<template>
    <b-row class="justify-content-md-center">
        <b-col col lg="10">
            <article class="media">
                <span class="breaking-news media-left">Breaking News</span>
                <div class="media-content">
                    <span class="time"></span>
                    <transition name="fade" tag="div" mode="out-in">
                        <a class="news" href="#" v-if="news[0]" key="0">The Egyptian Russian University reveals the mystery of numbers and writings in the most important square in Badr City</a>
                        <a class="news" href="#" v-if="news[1]" key="1">The Egyptian Russian University announces the vacancy of the university's assistant secretary general position.</a>
                        <a class="news" href="#" v-if="news[2]" key="2">The university administration is pleased to announce the availability of study opportunities for Egyptian and expatriate students for the academic year 2020/2021</a>
                        <a class="news" href="#" v-if="news[1]" key="3">The Egyptian Russian University announces its newest faculties and departments</a>

                    </transition>
                </div>
            </article>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data() {
           return {
               tickerLocation: 0,
               news: [
                   true,
                   false,
                   false,
               ]
           }
        },
        created: function() {
            setInterval(this.updateTicker, 5000);
        },
        methods: {
            updateTicker: function() {
                var removed = this.news.pop();
                this.news.unshift(removed);
            }
        }
    }
</script>

<style scoped >
    .media {
        min-height: 62px;
    }

    .breaking-news {
        background: linear-gradient(166deg, #c20000 50%, rgb(48 71 112) 50%);
        color: #fff;
        padding: 5px;
    }

    .media-content {
        padding: 5px;
        background: #eee;
        width: 88%;
    }

    .time {
        color: #33A3F1;
    }

    .news {
        color: #666666;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s
    }
    .fade-enter, .fade-leave-to {
        opacity: 0
    }
</style>