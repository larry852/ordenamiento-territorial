import { Component} from '@angular/core';

@Component({
  selector: 'app-estadisticas',
  templateUrl: './estadisticas.component.html',
  styles: []
})
export class EstadisticasComponent  {

  // Pie
  public pieChartLabels: string[] = ['Ginebra', 'Cali', 'Palmira'];
  public pieChartData: number[] = [300, 500, 100];
  public pieChartType: string = 'pie';

  // events
  public chartClicked(e: any): void {
    console.log(e);
  }

  public chartHovered(e: any): void {
    console.log(e);
  }

}
