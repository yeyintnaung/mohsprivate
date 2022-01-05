<template>
    <div>
    <div class="row mb-3">
        <div class="col-12 col-md-6"
             style="font-weight: 400 !important;"
             for="exampleInputPassword1">
            Name: {{this.name}}</div>
        <div class="col-12 col-md-6"
             style="font-weight: 400 !important;">Father
            Name: {{father_name}}</div>

    </div>
    <div class="row">
        <div class="col-12 col-md-6"
             style="font-weight: 400 !important;">Nrc
            No: {{nrc_no}}</div>
        <div class="col-12 col-md-6"
             style="font-weight: 400 !important;">Phone
            No: {{phone_no}}</div>

    </div>
    </div>
</template>

<script>
export default {
    props:['initial_id','selected_id'],
    name: "GetdatabyPatientId",
    data() {
        return {
         id:'',
            name:'',
            father_name:'',
            nrc_no:'',
            phone_no:''

        }
    },
    mounted() {

        this.getfromserver(this.initial_id)
    },

    methods: {
      getfromserver(id){
          console.log(id)
          axios({
              method: 'post',
              url: 'http://localhost/mohs/public/api/get_patient_detail_byid',
              data: {
                  id: id,

              }
          }).then(result=>{
              this.name=result.data[0].name;
              this.father_name=result.data[0].name;
              this.nrc_no=result.data[0].nrc_no;
              this.phone_no=result.data[0].phone_no;
              console.log(result.data[0].name)
          });
      }

    },
}
</script>

<style scoped>

</style>
