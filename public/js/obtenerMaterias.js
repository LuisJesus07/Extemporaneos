var urlMaterias = 'http://localhost/Extemporaneos/recursos/recursos/obtenerMateriasByPlan'

const app = new Vue({
	el:'#llenarSelect',
	data:{
		materias: []
	},
	created: function(){
         this.$http.get(urlMaterias)
         .then(function(response){
         this.materias = response.body;
      }, function(){
         alert('Error!');
      });
   }
})
