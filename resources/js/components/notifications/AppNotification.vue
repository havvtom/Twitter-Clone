<template>
	<div class="flex border-b border-gray-800 h-32">
		<component
			:is="`AppNotification${notification.type}`"
			:notification="notification"
		/>
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