var urlCarreras = 'http://localhost/Extemporaneos/recursos/recursos/obtenerCarreras'
var urlMaterias = 'http://localhost/Extemporaneos/recursos/recursos/obtenerMaterias'
var urlPlanes = 'http://localhost/Extemporaneos/recursos/recursos/obtenerPlanes'

var carrera = "ITC";
var urlExamnesPorCarrera = `http://localhost/Extemporaneos/administrador/consultarExamenes/examenesPorCarrera?(carrera=${this.carrera})`;

const materias = new Vue({
	el:'#llenarSelect',
	created: function(){
		this.getMaterias();
		this.getCarreras();
		this.getPlanes();
		this.getExamenesPorCarrera();
	},
	data:{
		materias: [],
		carreras: [],
		planes: [],
		showExamCarreras: false,
		examenes: []
	},
	methods: {
		getMaterias: function(){
			this.$http.get(urlMaterias).then(function(response){
				this.materias = response.body
			})
		},

		getCarreras: function(){
			this.$http.get(urlCarreras).then(function(response){
				this.carreras = response.body
			})
		},

		getPlanes: function(){
			this.$http.get(urlPlanes).then(function(response){
				this.planes = response.body
			})
		},

		getExamenesPorCarrera: function(){
			this.$http.get(urlExamnesPorCarrera).then(function(response){
				this.examenes = response.body
				console.log(response)
			})
		}
	}
})


/*
const app = new Vue({
	el:'#app',
	data:{
		examenes: []
	},
	methods:{
		getExamenesPorCarrera: function(){
			this.$http.get(urlExamnesPorCarrera+carrera).then(function(response){
				this.examenes = response.body
			})
		}
	}
})*/