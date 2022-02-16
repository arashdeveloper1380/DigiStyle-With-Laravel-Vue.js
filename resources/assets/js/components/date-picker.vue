<template>
    
                   

                    <div>
                 <date-picker v-model="date"></date-picker>
                    </div>
               
</template>

<script>
import VuePersianDatetimePicker from 'vue-persian-datetime-picker';
    export default {
      data(){

      return {
      date:''

      }

      },  
      components:{
      
      datepicker:VuePersianDatetimePicker

      }
    }
</script>
