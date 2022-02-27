<template>
    <div class="form-group">
        <label for="">Hba1c (mg/dl)</label>
        <div class="row">
            <div class="col-md-6">

                <select class="form-control form-select"
                        data-placeholder="Choose a Category"
                        tabindex="1" v-model="yesorno"  v-on:change="changeDisplay" :required="selectrequired">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
            </div>

            <div class="col-md-12 row ">
                <label for="">&nbsp;</label>
                <div class="col-6">
                    <input type="text" name="hba1c_value" v-model="hba1c_value"  class="form-control"
                           v-bind:class="[hideorshow]"

                           placeholder="Result" />
                </div>
                <div class="col-6">
                    <input type="date" name="hba1c_date" v-model="hba1c_date"  class="form-control"
                           v-bind:class="[hideorshow]"
                           id=""
                           placeholder="Date" :required="daterequired"/>
                </div>



            </div>
        </div>

        <!--        <p class="text-danger">{{error}} </p>-->
        <p class="text-danger">{{error}} </p>

    </div>

</template>

<script>
export default {
    props: ['oldvalue_date','oldvalue_value','title','error','fieldname'],

    data() {
        return{
            hba1c:'',
            yesorno:'Yes',
            hideorshow:'d-none',
            hba1c_date:'',
            hba1c_value:'',

        }
    },
    mounted(){
        if(this.oldvalue_value == ''){
            this.yesorno ='No',
                this.daterequired=false

        }else{
          this.hba1c_value=this.oldvalue_value;
          this.hba1c_date=this.oldvalue_date;
        }
        this.changeDisplay();
    },
    methods: {
        changeDisplay() {
            // `this` will refer to the component instance
            if(this.yesorno == 'Yes'){
                this.hideorshow='d-inline';

            }else{
                this.hba1c_date='';
                this.hba1c_value='';
                this.hideorshow='d-none';
            }
        }
    },
    name: "Hba1c"
}
</script>

<style scoped>

</style>
