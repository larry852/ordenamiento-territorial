import {Pipe, PipeTransform} from '@angular/core';

@Pipe({name: 'zones'})
export class Zones implements PipeTransform {
    public transform(objects: any[]): any[] {
        if(objects) {
            return objects.filter(object => {
                return object.pattern === undefined;
            });
        }
    }

}