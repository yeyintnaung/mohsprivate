<template>
    <div class="col-md-6">
        <div class="form-group row">
            <label>Height (cm)</label>
            <div class="col-3">
                <select class="form-control form-select"
                        data-placeholder="Choose a Category"
                        v-model="selectcmorfeet"
                        @change="cmorfeetchange"
                        tabindex="1">

                    <option value="cm">Cm</option>
                    <option value="feet">Feet</option>

                </select>
            </div>
            <div class="col-9" v-bind:class="[hideorshowcm]">

                <input type="number"
                       name="height_cm" v-model="heightcmmodel" @change="passchildtoparent"
                       class="form-control"

                       placeholder="height (CM)"/>
            </div>
            <div class="col-9" v-bind:class="[hideorshowfeet]">
                <div class="row">
                    <div class="col-6 col-md-6">

                        <input type="number"
                               name="height_cm" v-model="heightfeetmodel" value="" @change="passchildtoparent"
                               class="form-control"
                               placeholder="height (Feet)"/>

                    </div>
                    <div class="col-6 col-md-6">

                        <input type="number"
                               name="height_feet" v-model="heightfeettwmodel" value="" @change="passchildtoparent"
                               class="form-control"
                               placeholder="height (Feet)"/>

                    </div>
                </div>
            </div>


        </div>
    </div>


</template>

<script>
export default {

    data() {
        return {
            selectcmorfeet: 'cm',
            heightcmmodel:0,
            heightfeetmodel:0,
            heightfeettwmodel:0,
            hideorshowcm: 'd-block',
            hideorshowfeet: 'd-none',

        }
    },
    methods: {
        passchildtoparent(){
            this.$emit('forparent', { heightcmmodel:this.heightcmmodel, heightfeetmodel:this.heightfeetmodel, heightfeettwmodel: this.heightfeettwmodel })
        },
        cmorfeetchange() {
          if(this.selectcmorfeet == 'cm'){
              this.heightcmmodel=0;
              this.heightfeetmodel=0;
              this.heightfeettwmodel=0;
              this.hideorshowcm='d-block';
              this.hideorshowfeet='d-none';

          }else{
              this.heightcmmodel=0;
              this.heightfeetmodel=0;
              this.heightfeettwmodel=0;

              this.hideorshowcm='d-none';
              this.hideorshowfeet='d-block';
          }
        }

    },
    name: "CmorFeetComponent"
}
</script>

<style scoped>

</style>
