<template>
	<div>
		<div class="border border-b-8 border-gray-600 p-4 w-full">
			<app-tweet-compose/>
		</div>
		<app-tweet
			v-for="tweet in tweets"
			:key="tweet.id"
			:tweet="tweet"
		/>

		<div v-show="tweets.length" v-observe-visibility="visibilityChanged">
			
					hameno
		</div>
	</div>
</template>
<script type="text/javascript">
	import {mapGetters, mapActions, mapMutations} from 'vuex'
	export default {
		data () {
			return {
				page: 1,
				lastpage: null
			}
		},
		computed: {
			urlWithPage () {
				return `/api/timeline?page=${this.page}`
			},
			...mapGetters({
				tweets: 'timeline/tweets'
			})
		},
		methods: {
			...mapActions ({
				getTweets: 'timeline/getTweets'
			}),
			...mapMutations({
				PUSH_TWEETS: 'timeline/PUSH_TWEETS'
			}),

			visibilityChanged (isVisible) {
		      if(!isVisible){
		      	return
		      }

		      if( this.lastpage === this.page ) {
		      	return
		      }

		      this.page++; 

		      this.loadTweets()
		    },

		    loadTweets () {
		    	this.getTweets(this.urlWithPage).then(response=>{
		      		this.lastpage = response.data.meta.last_page
		      })
		    }
		},
		mounted () {
			this.loadTweets()

			Echo.private(`timeline.${this.$user.id}`)
				.listen('.TweetWasCreated', (e) => {
					this.PUSH_TWEETS([e])
				})
		}
	}
</script>