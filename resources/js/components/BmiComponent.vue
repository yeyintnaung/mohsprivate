<template>
    <div class="col-6">
        <div class="form-group">
            <label for="">BMI</label>
            <input type="text" name="bmi"
                   class="form-control" v-bind:value="this.resultbmi"
                   id=""
                   placeholder="BMI" disabled/>

<!--            @error('stroke')-->
<!--            <p class="text-danger">{{ $message }} </p>-->
<!--            @enderror-->

        </div>
    </div>
</template>

<script>
export default {
    name: "BmiComponent",
    props:['resultbmi'],
    mounted() {
        console.log(this.resultbmi)
    },
    data() {
        return {
            initresultbmi:0

        }
    }

}
</script>

<style scoped>

</style>
