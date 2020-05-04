<template>
	<div class="w-full inline-block p-4 border-b border-gray-600 hover:bg-gray-500">
		<component
			:is="`app-tweet-variant-${tweet.type}`"
			:tweet="tweet"
		/>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			tweet: {
				required: true,
				type: Object,

			}
		},
		data () {
			return {

			}
		}
	}
</script>