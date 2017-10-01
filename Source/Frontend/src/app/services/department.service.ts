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

}