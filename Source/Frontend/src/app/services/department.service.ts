import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';
import { environment } from './global';

@Injectable()
export class DepartmentService {
	constructor (
		private http: Http
		) {}

	getAll() {
		return this.http.get(environment.BASE_API_URL + '/departamentos')
		.map(res=>res.json());
	}

	isNumber(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}

	getSearch(query){
		if (this.isNumber(query))
			return this.http.get(environment.BASE_API_URL + '/departamentos/dane/'+query).map(res=>res.json());
		return this.http.get(environment.BASE_API_URL + '/departamentos/nombre/'+query).map(res=>res.json());
	}

	getStatistics() {
		return this.http.get(environment.BASE_API_URL + '/estadisticas/departamentos')
		.map(res=>res.json());
	}

}