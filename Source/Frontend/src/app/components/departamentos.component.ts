import { Component, OnInit } from '@angular/core';
import { DepartmentService } from '../services/department.service';
import { EstadisticasComponent } from './estadisticas.component';

@Component({
	selector: 'app-departamentos',
	templateUrl: './departamentos.component.html',
	styleUrls: [  '../app.component.css'], 
	providers: [DepartmentService, EstadisticasComponent]
})
export class DepartamentosComponent implements OnInit{
	departments = [];
	query = "";
	constructor(private departmentService: DepartmentService, private estadisticasComponent: EstadisticasComponent) {}

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
		var pieChartLabels = [];
		var pieChartData = [];
		var self = this;
		this.departmentService.getStatistics().subscribe(function(response) { 
			for (var i = response.length - 1; i >= 0; i--) {
				pieChartLabels.push(response[i].name);
				pieChartData.push(response[i].count);
			}
			self.estadisticasComponent.initStatistics(pieChartLabels, pieChartData);
		});
	}
}
