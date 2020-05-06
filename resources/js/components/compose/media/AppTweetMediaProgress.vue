<template>
	<div class="w-full h-1 bg-gray-800">
		<div class="h-1 bg-blue-500" :style="`width: ${progress}%;`">
			
		</div>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			progress: {
				required: true,
				type: Number
			}
		}
	}
</script>