import { Component} from '@angular/core';

@Component({
  selector: 'app-estadisticas',
  templateUrl: './estadisticas.component.html',
  styles: []
})
export class EstadisticasComponent  {

  // Pie
  public pieChartLabels: string[];
  public pieChartData: number[];
  public pieChartType: string = 'pie';

  // events
  public chartClicked(e: any): void {
    console.log(e);
  }

  public chartHovered(e: any): void {
    console.log(e);
  }

  public initStatistics(pieChartLabels, pieChartData){
    this.pieChartLabels = pieChartLabels;
    this.pieChartData = pieChartData;
    console.log(pieChartData);
    console.log(pieChartLabels);
  }
}
