<template>
	<div class="flex flex-wrap mb-4">
		<div 
			v-for="(image, index) in images"
			:key="index"
			class="w-6/12 flex-grow relative" 
			>
			<img :src="generateImagePreview(image)" class="rounded-lg">

			<a 
				href=""
				class="bg-gray-900 w-8 h-8 rounded-full absolute top-0 right-0 mt-3 mr-3 flex items-center justify-center" 
				@click.prevent="$emit('removed', image)"
				>
				<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-300"><path d="M6 18L18 6M6 6l12 12"></path></svg>
			</a>
		</div>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			images: {
				required:false,
				type: Array
			}
		},
		methods: {
			generateImagePreview (image) {
				return URL.createObjectURL(image)
			}
		}
	}
</script>