<template>
	<div class="h-10 w-10 relative">
		<svg class="transform -rotate-90"viewBox="0 0 120 120">
			<circle 
				cx="60"
				cy="60"
				fill="none"
				:r="radius"
				stroke-width="8"
				class="stroke-current text-gray-700"
			/>
			<circle 
				cx="60"
				cy="60"
				fill="none"
				:r="radius"
				stroke-width="8"
				class="stroke-current text-blue-500"
				:class="{'!text-red-500' : percentageIsOver}"
				:stroke-dasharray="dash"
				:stroke-dashoffset="offset"
			/>
		</svg>
	</div>
</template>
<script type="text/javascript">
	export default {
		props:{
			body: {
				required: true,
				type: String
			}
		},
		data () {
			return {
				radius: 30
			}
		},
		computed: {
			dash () {
				return 2*Math.PI*this.radius
			},
			percentage () {
				return this.body.length/280*100
			},
			percentageIsOver () {
				return this.percentage > 100
			},
			displayPercentage (){
				return this.percentage >= 100 ? 100 : this.percentage
			},
			offset () {
				let circ = this.dash
				let progress = this.displayPercentage/100

				return circ * (1 - progress)
			}
		}
	}
</script>