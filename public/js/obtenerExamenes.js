var urlExamenesAlumno = 'http://localhost/Extemporaneos/alumnos/consultarExamenes/obtenerExamenes'

const app = new Vue({
	el:'#app',
	data:{
		examenes: []
	},
	created: function(){
         this.$http.get(urlExamenesAlumno).then(function(response){
         this.examenes = response.body;
      }, function(){
         alert('Error!');
      });
   }

})



