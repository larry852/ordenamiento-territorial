import { Component, OnInit } from '@angular/core';
import { DepartmentService } from './services/department.service';

@Component({
	selector: 'app-departamentos',
	templateUrl: './departamentos.component.html',
	styleUrls: [  './app.component.css'], 
	providers: [DepartmentService]
})
export class DepartamentosComponent implements OnInit{
	constructor(private departmentService: DepartmentService) {}
	departments = {};

	loadDepartments(){
		this.departmentService.getAll().subscribe(data => this.departments = data)
	}

	ngOnInit() {
	}
}
