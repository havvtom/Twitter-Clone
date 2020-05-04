<template>
	<div class="mb-4 relative">
		<video controls preload :src="generateVideoPreview(video)" class="rounded-lg"></video>

		<a 
			href=""
			class="bg-gray-900 w-8 h-8 rounded-full absolute top-0 right-0 mt-3 mr-3 flex items-center justify-center" 
			@click.prevent="$emit('removed', video)"
			>
			<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-300"><path d="M6 18L18 6M6 6l12 12"></path></svg>
		</a>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			video: {
				required:true,
				type: File
			}
		},
		methods: {
			generateVideoPreview (video) {
				return URL.createObjectURL(video)
			}
		}
	}
</script>