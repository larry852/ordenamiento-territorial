import { Component} from '@angular/core';

@Component({
  selector: 'app-estadisticas',
  templateUrl: './estadisticas.component.html',
  styles: []
})
export class EstadisticasComponent  {

  // Pie
  public pieChartLabels: string[] = ['Amazonas', 'Antioquia', 'Arauca', 'Atlántico', 'Bolívar', 'Boyacá', 'Caldas', 'Caquetá', 'Casanare', 'Cauca', 'Cesar', 'Chocó', 'Córdoba', 'Cundinamarca', 'Guainía', 'Guaviare', 'Huila', 'La Guajira', 'Magdalena', 'Meta', 'Nariño', 'Norte de Santander', 'Putumayo', 'Quindío', 'Risaralda', 'San Andrés y Providencia', 'Santander', 'Sucre', 'Tolima', 'Valle del Cauca', 'Vaupés','Vichada'];
  public pieChartData: number[] = [11, 125, 7, 23, 46, 123, 27, 16, 19, 42, 25, 31, 30, 116, 9, 4, 37, 15, 30, 29, 64, 40, 13, 12, 14, 2, 87, 26, 47, 42, 6, 4];
  public pieChartType: string = 'pie';

  // events
  public chartClicked(e: any): void {
    console.log(e);
  }

  public chartHovered(e: any): void {
    console.log(e);
  }

}
