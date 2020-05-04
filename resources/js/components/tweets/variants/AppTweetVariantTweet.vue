<template>
	<div class="flex w-full">
		<div class="mr-3">
			<img :src="tweet.user.avatar" class="w-12 rounded-full">
		</div>
		<div class="flex-grow">
			<app-tweet-username 
				:user="tweet.user"
			/>
			<p class="text-gray-300 whitespace-pre-wrap">{{tweet.body}}</p>

			<div class="flex flex-wrap mt-4 mb-4" v-if="images.length">
				<div class="flex-grow w-6/12" v-for="(image, index) in images" :key="index">
					<img :src="image.url">
				</div>
			</div>

			<app-tweet-action-group 
				:tweet="tweet"
			/>
		</div>
	</div>
</template>

<script type="text/javascript">
	export default {
		props: {
			tweet: {
				required: true,
				type: Object
			}
		},
		computed: {
			images () {
				return this.tweet.media.data.filter(m => m.type === 'image')
			}
		}
	}
</script>