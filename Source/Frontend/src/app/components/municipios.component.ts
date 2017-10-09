import { Component, OnInit } from '@angular/core';
import { Router, Params, ActivatedRoute } from '@angular/router';
import { CityService } from '../services/city.service';

@Component({
	selector: 'app-municipios',
	templateUrl: './municipios.component.html',
	styleUrls: ['../app.component.css'], 
	providers: [CityService]
})
export class MunicipiosComponent implements OnInit {
	private idDepartment:number;
	cities = [];

	constructor(
		private route:ActivatedRoute,
		private router:Router,
		private cityService: CityService
		) { }

	loadCities(idDepartment){
		this.cityService.getAll(idDepartment).subscribe(data => this.cities = data)
	}

	ngOnInit() {
		this.route.params.forEach((params:Params)=>{
			this.idDepartment=params["idDepartment"];
			if(this.idDepartment!=null){
				this.loadCities(this.idDepartment);
			}			
		});
	}
}
