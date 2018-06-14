import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';
import { environment } from './global';

@Injectable()
export class ZoneService {
	constructor (
		private http: Http
		) {}

	getAll(idCity) {
		return this.http.get(environment.BASE_API_URL + '/zonas/'+idCity)
		.map(res=>res.json());
	}

	getSearch(query, idCity){
		return this.http.get(environment.BASE_API_URL + '/zonas/'+idCity+'/'+query).map(res=>res.json());
	}

	getStatistics(idCity) {
		return this.http.get(environment.BASE_API_URL + '/estadisticas/zonas/'+idCity)
		.map(res=>res.json());
	}
}