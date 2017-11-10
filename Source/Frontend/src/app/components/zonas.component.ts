import { Component, OnInit } from '@angular/core';
import { Router, Params, ActivatedRoute } from '@angular/router';
import { ZoneService } from '../services/zones.service';

@Component({
	selector: 'app-zonas',
	templateUrl: './zonas.component.html',
	styleUrls: ['../app.component.css'],
	providers: [ZoneService]
})
export class ZonasComponent implements OnInit {
	private idCity:number;
	zones = [];
	query = "";
	pieChartLabels = [];
	pieChartData = [];
	isDataAvailable = false;

	constructor(
		private route:ActivatedRoute,
		private router:Router,
		private zoneService: ZoneService
		) { }

	loadZones(idCity){
		this.zoneService.getAll(idCity).subscribe(data => this.zones = data)
	}

	ngOnInit() {
		this.route.params.forEach((params:Params)=>{
			this.idCity=params["idCity"];
			if(this.idCity!=null){
				this.loadZones(this.idCity);
			}			
		});
	}

	search(){
		this.zoneService.getSearch(this.query, this.idCity).subscribe(data => this.zones = data)
	}

	loadStatistics(idCity){
		var self = this;
		this.zoneService.getStatistics(this.idCity).subscribe(function(response) { 
			self.pieChartLabels = response.map(a => a.name);
			self.pieChartData = response.map(a => a.area);
			self.isDataAvailable = !self.isDataAvailable;
		});
	}

}
