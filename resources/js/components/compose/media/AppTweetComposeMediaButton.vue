<template>
	<div>
		<input 
			type="file" 
			:id="id" 
			class="hidden" 
			multiple
			@change="$emit('selected', $event.target.files)"
			>

		<label :for="id" class="cursor-pointer">
			<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-blue-500"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
		</label>
	</div>
</template>
<script type="text/javascript">
	export default {
		props: {
			id: {
				required: true,
				type: String			}
		}
	}
</script>