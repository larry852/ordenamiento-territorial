import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class CityService {
	constructor (
		private http: Http
		) {}

	getAll(idDepartment) {
		return this.http.get('https://ordenamiento-backend.herokuapp.com/municipios/'+idDepartment)
		.map(res=>res.json());
	}

	isNumber(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}

	getSearch(query, idDepartment){
		if (this.isNumber(query))
			return this.http.get('https://ordenamiento-backend.herokuapp.com/municipios/'+idDepartment+'/dane/'+query).map(res=>res.json());
		return this.http.get('https://ordenamiento-backend.herokuapp.com/municipios/'+idDepartment+'/nombre/'+query).map(res=>res.json());
	}
}