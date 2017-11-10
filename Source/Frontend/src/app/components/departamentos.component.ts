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
	query = "";
	pieChartLabels = [];
	pieChartData = [];
	isDataAvailable = false;
	constructor(private departmentService: DepartmentService) {}

	loadDepartments(){
		this.departmentService.getAll().subscribe(data => this.departments = data);
	}

	ngOnInit() {
		this.loadDepartments();
	}

	search(){
		this.departmentService.getSearch(this.query).subscribe(data => this.departments = data);
	}


	loadStatistics(){
		var self = this;
		this.departmentService.getStatistics().subscribe(function(response) { 
			self.pieChartLabels = response.map(a => a.name);
			self.pieChartData = response.map(a => a.count);
			self.isDataAvailable = !self.isDataAvailable;
		});
	}
}
