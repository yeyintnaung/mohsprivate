<template>
    <div class="form-group">
        <label for="">HbA1C(last date)</label>
        <div class="row">
            <div class="col-md-6">

                <select class="form-control form-select"
                        data-placeholder="Choose a Category"
                        tabindex="1" v-model="yesorno" v-bind:name="namefieldonselect" v-on:change="changeDisplay" :required="selectrequired">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>

                </select>
            </div>

            <div class="col-md-6">

                <input type="date"  v-bind:name="namefieldondate" v-bind:value="old_hba1c" class="form-control"
                       v-bind:class="[hideorshow]"
                       id=""
                       placeholder="HbA1C(last date)" :required="daterequired"/>
            </div>
            ffff
        </div>
        {{old_hba1c}}
        {{daterequired}}

        <!--        <p class="text-danger">{{error}} </p>-->
        <p class="text-danger">{{error}} </p>

    </div>

</template>

<script>
export default {
    props: ['old_hba1c','error'],

    data() {
        return{
            daterequired:true,
            selectrequired:true,
            yesorno:'Yes',
            hideorshow:'d-none',
            namefieldondate:'hba1c'

        }
    },
    mounted(){
        if(this.old_hba1c == 'No'){
            this.yesorno =this.old_hba1c,
            this.daterequired=false

        }
        this.changeDisplay();
    },
    methods: {
        changeDisplay() {
            // `this` will refer to the component instance
            if(this.yesorno == 'Yes'){
                this.hideorshow='d-inline';
                this.namefieldondate='hba1c';
                this.daterequired=true;
                this.namefieldonselect='';
                this.selectrequired=false;

            }else{
                this.hideorshow='d-none';
                this.namefieldondate='';
                this.daterequired=false;
                this.selectrequired=true;


                this.namefieldonselect='hba1c';

            }
          console.log(this.yesorno)
        }
    },

    name: "HbaonecComponent"
}
</script>

<style scoped>

</style>
