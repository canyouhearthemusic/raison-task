FROM node:21.7.2-alpine

WORKDIR /var/www/html

COPY package*.json ./

RUN npm install

COPY . .

EXPOSE 5173

ENTRYPOINT ["npm"]