<template>
	<textarea
		class="bg-gray-900 w-full text-gray-300 text-lg resize-none outline-none mb-2"
		:placeholder="placeholder"
		@input="$emit('input', $event.target.value); resize($event)"
		:value="value"
		autofocus
	>				
	</textarea>
</template>
<script type="text/javascript">
	export default {
		props: {
			value: {
				required: false
			},
			placeholder: {
				required: false,
				type: String
			}
		},
		methods: {
			resize (e) {
				e.target.style.height = "auto"
				e.target.style.height = `${e.target.scrollHeight}px`
			}
		}
	}
</script>