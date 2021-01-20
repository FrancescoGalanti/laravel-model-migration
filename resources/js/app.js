import "./bootstrap";
import Vue from "vue";

const app = new Vue({
    
    el: "#app",
    data:{
      list: []
    },
    
    created(){
        // Testing API search //
         axios.get("http://127.0.0.1:8000/api/tool")
                
              .then(response => {
                // deafaukt situation
                console.log(response.data)
                this.list = response.data;
               
                 
               })
   
              .catch(error => {
               console.log(error);
              });
   
          },

        
});
