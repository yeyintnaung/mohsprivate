<template>
    <div class="col-6">
        <div class="form-group">
            <label for="">BMI {{heightcmmodel}}</label>
            <input type="text" name="bmi"
                   class="form-control"
                   id=""
                   placeholder="BMI" disabled/>

<!--            @error('stroke')-->
<!--            <p class="text-danger">{{ $message }} </p>-->
<!--            @enderror-->
            <div class="input-group mb-3">
                <input type="text" class="form-control"
                       placeholder="" aria-label=""
                       aria-describedby="basic-addon1"
                       disabled>

<!--                <div class="input-group-append">-->
<!--                    <button class="btn btn-info text-white" type="button">Click To Calculate-->
<!--                    </button>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BmiComponent",
    mounted() {
            this.heightcmmodel=localStorage.getItem("height_cm");

    },
    data() {
        return {
          heightcmmodel:0

        }
    },
    methods:{
        getdatafromchild(args){
            console.log(args);
        }
    }
}
</script>

<style scoped>

</style>
