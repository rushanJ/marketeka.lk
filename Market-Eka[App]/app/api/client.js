import { create } from "apisauce";

const apiClient = create({
  baseURL: "http://192.168.1.100:9000/api", //change to your pc's ip (**localhost won't work)
});

const get = apiClient.get;
apiClient.get = async (url, params, axiosConfig) => {
  const response = await get(url, params, axiosConfig);

  return response;
};

export default apiClient;
