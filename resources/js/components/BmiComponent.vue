<template>
    <div class="col-6">
        <div class="form-group">
            <label for="">BMI</label>
            <input type="text"
                   class="form-control" v-model="this.resultbmi"
                   placeholder="BMI" disabled/>
            <input type="hidden" name="bmi"
                   class="form-control" v-model="this.resultbmi"
                   id=""
                   />

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
