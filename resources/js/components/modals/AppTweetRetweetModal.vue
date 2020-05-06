<template>
	<div>
		<app-tweet-retweet-compose 
			:tweet="tweet"
			@success="$emit('close')"
		/>
		<component 
			class="border border-gray-700 mt-4 p-4 rounded-lg"
			v-if="tweet"
			:is="`app-tweet-variant-${tweet.type}`"
			:tweet="tweet"
		/>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			tweet: {
				required:true,
				type:Object
			}
		}
	}
</script>