import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class ZoneService {
  constructor (
    private http: Http
  ) {}

  getAll(idCity) {
    return this.http.get('https://ordenamiento-backend.herokuapp.com/zonas/'+idCity)
    .map(res=>res.json());
  }
}