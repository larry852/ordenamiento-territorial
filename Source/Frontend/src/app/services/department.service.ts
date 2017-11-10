import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class DepartmentService {
	constructor (
		private http: Http
		) {}

	getAll() {
		return this.http.get('https://ordenamiento-backend.herokuapp.com/departamentos')
		.map(res=>res.json());
	}

	isNumber(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}

	getSearch(query){
		if (this.isNumber(query))
			return this.http.get('https://ordenamiento-backend.herokuapp.com/departamentos/dane/'+query).map(res=>res.json());
		return this.http.get('https://ordenamiento-backend.herokuapp.com/departamentos/nombre/'+query).map(res=>res.json());
	}

	getStatistics() {
		return this.http.get('https://ordenamiento-backend.herokuapp.com/estadisticas/departamentos')
		.map(res=>res.json());
	}

}