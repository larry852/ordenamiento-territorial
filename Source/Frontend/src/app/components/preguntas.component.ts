import { Component, OnInit } from '@angular/core';
import { Router, Params, ActivatedRoute } from '@angular/router';

@Component({
	selector: 'app-preguntas',
	templateUrl: './preguntas.component.html',
	styles: []
})
export class PreguntasComponent implements OnInit {
	first_time;

	constructor(
		private route:ActivatedRoute,
		private router:Router,) { }

	ngOnInit() {
		this.route.params.forEach((params:Params)=>{
			this.first_time=params["first"];
			if(this.first_time == null){
				window.location.href = '/preguntas/1';
			}			
		});
	}

}
