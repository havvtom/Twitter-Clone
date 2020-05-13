<template>
	<div class="p-4">
		<div class="text-gray-300 mb-4">
			<app-tweet-username :user="notification.data.user"/> liked you tweet
		</div>
		<p class="text-gray-600">
			{{ notification.data.tweet.body }}
		</p>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			notification: {
				required: true,
				type: Object
			}
		}
	}
</script>