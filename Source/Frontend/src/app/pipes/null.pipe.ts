import {Pipe, PipeTransform} from '@angular/core';

@Pipe({name: 'null'})
export class NullPipe implements PipeTransform {
    transform(value:any) {
         if (value.includes("null")) return 'No disponible';
         return value;
    }

}