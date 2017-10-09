import {Pipe, PipeTransform} from '@angular/core';

@Pipe({name: 'department'})
export class Department implements PipeTransform {
    public transform(objects: any[]): any[] {
        if(objects) {
            return objects.filter(object => {
                return object.pattern === null;
            });
        }
    }

}