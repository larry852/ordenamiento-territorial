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

}
