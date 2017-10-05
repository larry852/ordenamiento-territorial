import { Component, OnInit } from '@angular/core';
import { DepartmentService } from '../services/department.service';

@Component({
	selector: 'app-departamentos',
	templateUrl: './departamentos.component.html',
	styleUrls: [  '../app.component.css'], 
	providers: [DepartmentService]
})
export class DepartamentosComponent implements OnInit{
	departments = [];
	constructor(private departmentService: DepartmentService) {}

	loadDepartments(){
		this.departmentService.getAll().subscribe(data => this.departments = data)
	}

	ngOnInit() {
		this.loadDepartments();
	}
}
