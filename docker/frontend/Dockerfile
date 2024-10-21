FROM node as build-stage
WORKDIR /var/www/front
COPY ./front/package.json ./
RUN npm install --force --loglevel verbose
COPY ./front .
RUN npm run build


FROM nginx as production-stage
WORKDIR /usr/share/nginx/html
RUN rm -rf ./*
COPY --from=build-stage /var/www/front/dist .

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]