import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import {HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';
import { interfasdeusuario } from '../interface/usuario.interface';

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {

  base = environment.base;
  constructor(private http: HttpClient) { }

  getUsuarios(): Observable<interfasdeusuario[]>{
    return this.http.get<interfasdeusuario[]>(`${this.base}usuario/list`);
  }

}
