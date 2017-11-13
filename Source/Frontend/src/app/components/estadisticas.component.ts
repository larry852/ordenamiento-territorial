import { Component, Input} from '@angular/core';

@Component({
  selector: 'app-estadisticas',
  templateUrl: './estadisticas.component.html',
  styles: []
})
export class EstadisticasComponent  {

   // Pie
  @Input() pieChartLabels: string[];
  @Input() pieChartData: number[];
  public pieChartType: string = 'pie';
  
  @Input() isDataAvailable:boolean = false;

  // events
  public chartClicked(e: any): void {
    console.log(e);
  }

  public chartHovered(e: any): void {
    console.log(e);
  }
}
